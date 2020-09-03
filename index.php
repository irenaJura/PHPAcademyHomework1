<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>

<div class="grid-container">
    <header>
        <h1 class="text-center">Some stuff for homework</h1>
        <h4 class="text-center subheader">This is a subheader, apparently that's a thing now</h4>
    </header>
<hr/>
<div class="callout primary text-center">
    <h5>This is a text with light blue background.</h5>
    <p>It looks neat, so I decided to include it to this page I'm making.</p>
</div>

    <section>
        <h3>All about buttons</h3>
        <i>I present you some colorful buttons, for your entertainment!</i>
        <div class="grid-container grid-margin-x">
            <div class="medium-flex-dir-row">
                <button type="button" class="primary button">Primary</button>
                <button type="button" class="secondary button">Secondary</button>
                <button type="button" class="success button">Success</button>
                <button type="button" class="alert button">Alert</button>
                <button type="button" class="warning button">Warning</button>
            </div>
        </div>
    </section>


    <section>
        <h3>Do you like this switch thingy?</h3>
            <strong>Yes Or No?</strong>
            <div class="switch large">
                <input class="switch-input" id="yes-no" type="checkbox" name="exampleSwitch">
                <label class="switch-paddle" for="yes-no">
                    <span class="show-for-sr">Do you like this switch thingy?</span>
                    <span class="switch-active" aria-hidden="true">Yes</span>
                    <span class="switch-inactive" aria-hidden="true">No</span>
                </label>
            </div>
    </section>

    <section>
        <h4>What is a page without a good old table? </h4>
        <table>
            <thead>
            <tr>
                <th>Weekday</th>
                <th>PHP Academy class</th>
                <th>When</th>
                <th>Where</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Monday</td>
                <td>Introduction & Setting up the environment</td>
                <td>4-8pm</td>
                <td>Efos</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>Variables, loops</td>
                <td>5-8pm</td>
                <td>Efos</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>More PHP stuff</td>
                <td>5-8pm</td>
                <td>Efos</td>
            </tr>
            </tbody>
        </table>
    </section>

    <section>
        <h3>If you're bored, here is a random list of things to do in Osijek:</h3>
            <ol class="circle">
                <li>Take a walk along the river Drava</li>
                <li>Go to Kopika for a swim</li>
                <li>Visit the Zoo</li>
            </ol>
    </section>


    <section>
        <div data-closable="fade-out" class="todo-list-card card">
            <div class="card-divider">
                <h3>To Do List</h3>
                <button class="close-button" data-close>x</button>
            </div>
            <div class="card-section">
                <ul>
                    <li><input id="item1" type="checkbox"><label for="item1"></label>Set up virtual box</li>
                    <li><input id="item2" type="checkbox"><label for="item2"></label>Look up Foundation</li>
                    <li><input id="item3" type="checkbox"><label for="item3"></label>Finish homework</li>
                </ul>
            </div>
        </div>
    </section>
</div>






<?php include 'footer.php'; ?>


</html>