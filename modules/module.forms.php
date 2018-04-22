<?php class forms extends masterclass {
	
    
    
	function gettables() {
        $widgets = [
			WIDGET_TEXT 		=> WIDGET_TEXT, 
			WIDGET_TEXTAREA 	=> WIDGET_TEXTAREA, 
			WIDGET_HTML 		=> WIDGET_HTML,
			WIDGET_BBCODE 		=> WIDGET_BBCODE,
			WIDGET_PASS 		=> WIDGET_PASS,
			WIDGET_HIDDEN 		=> WIDGET_HIDDEN,
			WIDGET_CHECKBOX 	=> WIDGET_CHECKBOX,
			WIDGET_RADIO 		=> WIDGET_RADIO,
			WIDGET_SELECT 		=> WIDGET_SELECT,
			WIDGET_MULTSELECT 	=> WIDGET_MULTSELECT,
			WIDGET_DATE			=> WIDGET_DATE,
			WIDGET_CHECKBOXES 	=> WIDGET_CHECKBOXES,
			WIDGET_INFO 		=> WIDGET_INFO,
			WIDGET_KEYVALUES 	=> WIDGET_KEYVALUES,
			WIDGET_EMAIL 		=> WIDGET_EMAIL,
			WIDGET_NUMBER		=> WIDGET_NUMBER,
			WIDGET_URL			=> WIDGET_URL,
			WIDGET_PHONE		=> WIDGET_PHONE,
			WIDGET_SLUG			=> WIDGET_SLUG,
		];
		
		$dbtypes = [
			DB_TEXT 	=> DB_TEXT,
			DB_BLOB 	=> DB_BLOB,
			DB_STRING 	=> DB_STRING,
			DB_BOOL 	=> DB_BOOL, 
			DB_INT 		=> DB_INT, 
			DB_DATE 	=> DB_DATE, 
			DB_FLOAT 	=> DB_FLOAT,
		];
		return 
		[
			'forms' => [
				'fields' => [					
					'name'	=> 	[ 'string', 'text', 'search' => TRUE, 'required' => TRUE ],
					'split' => [ 'bool', 'checkbox' ],
					'sendmail' => [ 'bool' , 'checkbox' ],
					'mail_topic' => [ 'string' , 'text' ],                    
					'fields' => [ DB_ARRAY, WIDGET_TABLE,
                        'children' => [
                            'name' => [DB_STRING, WIDGET_TEXT],
                            'type' => [DB_INT,WIDGET_SELECT, 'options' => $dbtypes],
                            'widget' => [DB_INT, WIDGET_SELECT, 'options' => $widgets],
                            'options' => [DB_TEXT, WIDGET_KEYVALUES],
                            'required' => [DB_BOOL, WIDGET_CHECKBOX],
                        ] 
                    ],					
				],
			],
			'forms_messages' => [
				'fields' => [					
					'form_id'	=> 	[ 'int', 'hidden', 'index' => TRUE ],
					'data' => [ 'text', 'array' ],
					'sent' => [ DB_DATE , WIDGET_DATE],
					
				],
				'fk' => [
					'form_id' => 'forms(id)'
				],
			],
		];		
	}
	
	function extend() {
		$this->buttons['admin']['messages'] = 'fa-commenting';
	}

	
	
	function getDescription() {
		return 'Module for form creation and management';
	}
	
	
	
	function addField($key = null, $data = null) {
		$this->ajax = true;	
		
		
		return tpl('forms/field', array(
			'key' => $key,
			'types' => $this->options['dbtypes'],
			'widgets' => $this->options['widgets'],
			//'validators' =>$this->options['validators'],
			'data' => $data));
	}


	function view($id = NULL) {
		$data = parent:: view($id);
		$_fields = unserialize($data['fields']);

		$fields = array();

		foreach($_fields as $field) {
			$fields[$field['name']] = [
				$field['type'],
				$field['widget'],
				'required' => (int)@$field['required'],
                'options' => $field['options'],
			];
		}
		$data['fields'] = $fields;
		$data['id'] = $id;
		
		return $data;
	}	
	
	function post() { 
		$this->ajax = true;
		$formid = (int)$this->post['id'];
        if($formid < -1) {
            echo json_encode(array('message' => T('wrong data'), 'status' => 'error'));	die();	
        }
		$form = q('forms')->qget($formid)->run();

		$fields = unserialize($form['fields']);
		$fdata = array(); 
		foreach($this->post['form'] as $k => $v) {
			$dbtype = getFieldDBType($k, $fields);
			$fdata[$k] = sqlFormat($dbtype, $v);
		}
		$fdata = moveToBottom($fdata, 'message');

		$data = [
			'form_id' => $formid,
			'data' =>  serialize($fdata),
			'sent' =>   now() ,
		];
		q('forms_messages')->qadd($data)->run();
		
		if($form['sendmail']) {
			$data = [
				'subject' => $form['mail_topic'],
				'body' => mtpl('mail', ['data' => $fdata]),
				'from' => $fdata['email'],
				'to'   => G('adm_mail'),
			];
			//print_r($data);
			sendMail($data);
		}
		cache('forms_messages', q('forms_messages')->qlist()->run());

		echo json_encode(array('message' => T('form_submitted'), 'status' => 'ok'));	die();	
	}
	
	function messages() {
		$qMsg = q('forms_messages')->qlist()->order('sent desc');
		/*if($this->id > 0) {
			$qMsg->where(qEq('form_id', $this->id));
		}
		return $qMsg->run();*/
		
		$qForm = q('forms')->qlist();
            
		if($this->id > 0) {
			$qMsg->where(qEq('form_id', $this->id));
			$qForm->where(qEq('id', $this->id));	
		}
        $name = '';
		$forms = array();
		$_forms = $qForm->run();
		foreach($_forms as $form) {
			$forms[$form['id']] = unserialize($form['fields']);
            if($this->id > 0) {
                $name = $form['name'];
            }
		}
		
		$messages = $qMsg->run(); 
		
		$data = [
			'forms' => $forms,
			'messages' => $messages,
            'name' => $name,
		];
		//print_r($data);
		return $data;
		
	}
    
    /** Delete message **/
    public function delmsg($id = NULL) {
		if(NULL == $id) $id = $this->id;
		q('forms_messages')->qdel($id)->run();
		$this->parse = FALSE; 
		return json_encode(array('redirect' => 'self', 'status' => 'ok', 'timeout' => 1));
    }
		
}


function getFieldDBType($key, $fields) { //inspect($fields); 

	foreach($fields as $field) { 
		if($field['name'] == $key) {;
			return $field['type'];
		}
	}	
	return 'text';
}

function getFieldType($key, $fields) { //inspect($fields); 

	foreach($fields as $field) { 
		if($field['name'] == $key) {;
			return $field['widget'];
		}
	}	
	return 'text';
}
function getFieldOptions($key, $fields) { //inspect($fields); 

	foreach($fields as $field) { 
		if($field['name'] == $key) {;
			return keyvalues($field['options']);
		}
	}	
	return '';
}