<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Message',
    'email_message' => 'You have recieved a new email',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'example@gmail.com',
    'to' => 'zakiya.fathima27@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'phone\' is required.'
    )
    ),
    'date' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'date',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'date\' is required.'
    )
    ),
    'message' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>