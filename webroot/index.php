<?php

$meta=[];
$meta['title']='Jason Snider';
$meta['description']='All about Jason Snider';
$meta['keywords']='Jason Snider, Web Developer, Mobile Developer';

$content = <<<EOT
<h1>Hello I'm Jason Snider</h1>
<p>
    <img class="avatar" src="https://www.gravatar.com/avatar/4678a33bf44c38e54a58745033b4d5c6?d=mm&s=64" alt="My Avatar">
    Jason Snider is a full stack web and hybrid mobile application developer, systems architect, Linux aficionado, 
    open source advocate, impromptu DBA and security enthusiast with a sincere passion for building and 
    advancing knowledge while resolving complex problems  and business challenges through technical 
    innovation.
</p>

<h2>Projects</h2>

<div class="grid">

    <div class="col">
        <div class="card">
            <h3>Draw on Canvas</h3>
            <p>
                Built a drawing application using the 
                canvas and JavaScript.
            </p>

            <div class="card-controls">
                <a href="/draw">Demo</a>
            </div>
            
        </div>
    </div>

    <div class="col">
        <div class="card">
            <h3>Draw on Canvas</h3>
            <p>
                Built a drawing application using the 
                canvas and JavaScript.
            </p>

            <div class="card-controls">
                <a href="/draw">Demo</a>
            </div>
            
        </div>
    </div>

    <div class="col">
        <div class="card">
            <h3>Draw on Canvas</h3>
            <p>
                Built a drawing application using the 
                canvas and JavaScript.
            </p>

            <div class="card-controls">
                <a href="/draw">Demo</a>
            </div>
            
        </div>
    </div>

</div>
EOT;

include '../core/layout.php';