<?php
include '../core/processContactForm.php';
$meta=[];
$meta['title']='Contact Jason Snider';

$content=<<<EOT

<h1>Jason Snider</h1>

<form action="contact.php" method="POST" novalidate>

    <div class="form-control">
        <label for="name">Name</label>
        <input value="{$valid->userInput('name')}" type="text" id="name" name="name">
        <div>{$valid->error('name')}</div>
    </div>

    <div class="form-control">
        <label for="email">Email Address</label>
        <input value="{$valid->userInput('email')}"id="email" type="email" name="email">
        <div>{$valid->error('email')}</div>
    </div>


    <div class="form-control">
        <label for="message">Ask us a question.</label>
        <textarea rows="4" cols="50" id="message" name="message">{$valid->userInput('message')}</textarea>
        <div>{$valid->error('message')}</div>
    </div>

    <div class="form-control">
        <input type="submit" value="Send">
    </div>

        
</form>
EOT;

include '../core/layout.php';
