<?php
$this->layout = false;
echo $this->Html->docType('html5');
echo $this->Html->tag('html');
echo $this->Html->tag('head');
echo $this->Html->charset('utf-8');
echo $this->Html->meta(array("http-equiv" => "X-UA-Compatible", "content" => "IE=edge"));
echo $this->Html->meta(array('content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no', 'name' => 'viewport'));
echo $this->Html->meta('icon');
echo $this->Html->Tag('title', 'Php  Example');
echo $this->Html->useTag('tagend', 'head');
echo $this->Html->tag('body');

echo $this->Html->div('',null, array("style" => "width: 100%;text-align: center;top: 45%;position: fixed;"));
echo $this->Form->create(false, array('target' => '_self'));
echo $this->Form->input('text', array('label' => FALSE, 'div' => false, 'placeholder' => 'Hello World', 'value' => '', 'style' => "text-align: center;", "required" => true));
echo $this->Form->end(array('label' => 'Download PPT', "style" => "padding: 5px;margin: 10px;"));
echo $this->Html->useTag('tagend', 'div');
echo $this->Html->useTag('tagend', 'body');
echo $this->Html->useTag('tagend', 'html');
