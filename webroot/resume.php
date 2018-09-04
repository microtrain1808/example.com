<?php
$meta=[];
$meta['title']='Jason Snider';
$meta['description']='Jason Snider\'s Resume';
$meta['keywords']='Jason Snider, Web Developer, Mobile Developer';

$content=<<<EOT
<main>
<section class="intro">
    <h1>Jason Snider</h1>

    <a href="https://www.linkedin.com/in/jdsnider/" 
        target="_blank"
        rel="noopener">
        LinkedIn
    </a>

    &#x25CF;

    <a href="https://github.com/jasonsnider" 
    target="_blank"
    rel="noopener">
        GitHub
    </a>

    &#x25CF;

    La Grange Park, IL
</section>

<section>

    <h2 class="text-initial">Full Stack Web and Hybrid Mobile Applications Developer</h2>

    <p>
        A full stack web and hybrid application developer, 
        systems architect, Linux aficionado, front end 
        engineer, open source advocate, impromptu DBA and 
        security enthusiast with a sincere passion for 
        building and advancing knowledge while resolving 
        complex problems and business challenges through 
        technical innovation.
    </p>

    <ul>
        <li>Strong thechnical skills</li>
        <li>Knowledge of multiple stacks</li>
    </ul>

    <h3 class="text-initial">Core Competencies</h3>

    <ul class="cc-left">
        <li>Full Stack Development</li>
        <li>Front End Development</li>
        <li>Server Side Development</li>
    </ul>
    
    <ul class="cc-right">
        <li>Hybrid Mobile Development</li>
        <li>Savvy Problem Solver</li>
        <li>Strong Eye for Design</li>
    </ul>
</section>

<section class="certs">
    <h2>Certifications and Technical Proficiencies</h2>

    <ul>
        <li>
            <em>Certifications:</em>
            Agile Certified Scrum Master
        </li>
        <li>
            <em>Platforms:</em>
            Linux, LAMP, MEAN, NodeJS
        </li>
        <li>
            <em>Databases:</em>
            MySQL, MongoDB
        </li>
        <li>
            <em>Tools:</em>
            VS Code, SSH, Gulp, Git
        </li>
        <li>
            <em>Languages:</em>
            HTML, CSS, SASS, JavaScript, ES6, PHP, BASH, SQL, TypeScript
        </li>
    </ul>


</section>

<section class="emp">
    <h2>Professional Experience</h3>
    <h3>Employeer 1 - Chicago, IL <span class="date">2015 - Present</span></h2>
    <p>About the employeer</p>

    <h4>Job Title</h4>
    <ul>
        <li>Job duty 1</li>
        <li>Job duty 2</li>
    </ul>

    <h5>Key Contributions</h5>
    <ul>
        <li>Full stack LAMP development(Linux, Apache, MySQL, PHP, Bash, Ajax).</li>
        <li>Contribution 2</li>
    </ul>
</section>

<section class="edu">
    <h2>Education</h2>

    <h3>MicroTrain Technologies - Chicago, IL <span class="date">2011</span></h3>
    <h4>Business Analysis Fundementals</h4>

    <h3>Keller Graduate School of Management - Oakbrook, IL <span class="date">2007-2009</span></h3>
    <h4>Information Systems Management, Information Security</h4>

    <h3>Devry University - Addison, IL <span class="date">2002-2006</span></h3>
    <h4>Computer Information Systems</h4>
</section>
EOT;

include '../core/layout.php';