<?php

require_once "../Private/functions.php";

$response = getData('worker', 1);

?>

<div class="resume-container">
    <article class="resume-page">
        <?php
        $workerFields = array();
        foreach ($response['resume_fields'] as $field) {
            $workerFields[$field["name"]] = $field["pivot"]["value"];
        }

        ?>
        <section class="title">
            <h1 class="candidate-name name">
                <?php
                echo $workerFields["name"];
                ?>
            </h1>

            <div class="address">
                <h3 class="address subtitle name">
                                <span class="address-number"> <?php
                                    echo $workerFields["address"];
                                    ?></span>
                </h3>
                <h3 class="address-location subtitle name">
                                <span class="address-city"><?php
                                    echo $workerFields["city"];
                                    ?></span>,
                    <span class="address-state"><?php
                        echo $workerFields["country"];
                        ?></span>
                </h3>
                <h3 class="phone subtitle name"><?php
                    echo $workerFields["phone"];
                    ?></h3>
                <h3 class="email subtitle name"><?php
                    echo $workerFields["email"];
                    ?></h3>

            </div>
        </section>

        <section class="summary">
            <h2 class="summary-section-title category">Summary</h2>
            <p class="summary-text description">
                <?php
                echo $workerFields["address"];
                ?>
            </p>
        </section>

        <section class="education">
            <h2 class="education-section-title category">Education</h2>

            <h1 class="education-title subtitle">
                            <span class="education-institution"><?php
                                echo $workerFields["Institute"];
                                ?></span>
            </h1>

            <h2 class="education-subtitle subtitle">
                            <span class="education-type"><?php
                                echo $workerFields["Education Level"];
                                ?></span>
                <span class="education-status"><?php
                    echo $workerFields["Current Status"];
                    ?></span>
            </h2>

        </section>

        <section class="employment">
            <h2 class="employment-section-title category">Employment History</h2>

            <h1 class="employment-title subtitle">
                            <span class="emlployment-institution"> <?php
                                echo $workerFields["Company Name"];
                                ?></span>
                <span class="education-credential-location"><?php
                    echo $workerFields["city"];
                    ?></span>
            </h1>

            <h2 class="employment-subtitle subtitle">
                            <span class="employment-type"><?php
                                echo $workerFields["Job Type"];
                                ?></span>
            </h2>

            <p class="employment-description description">
                <?php
                echo $workerFields["Description"];
                ?>
            </p>
            <br>

            <h1 class="employment-title subtitle">
                <span class="emlployment-institution">  </span>
                <span class="education-credential-location"></span>
            </h1>

            <h2 class="employment-subtitle subtitle">
                <span class="employment-type"></span>
            </h2>

            <p class="employment-description description">

            </p>

        </section>

        <section class="hobby">
            <h2 class="skill-section-title category">Hobbies and Interests</h2>
            <p class="hobby-description description">
                <?php
                echo $workerFields["Hobbies Description"];
                ?>
            </p>

        </section>

        <section class="skill">
            <h2 class="skill-section-title category">Professional Skills</h2>

            <ul class="description">
                <li> <?php
                    echo $workerFields["Skills Description"];
                    ?></li>
                <li></li>
            </ul>

        </section>

    </article>
</div>