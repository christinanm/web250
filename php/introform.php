<?php
// Default data
$defaults = [
    'image' => 'images/best_friends.png',
    'alt' => 'My cat and I',
    'caption' => 'Hanging out with my cat!',
    'personal' => 'I was born and raised in New Jersey, and I’ve been a resident of Charlotte for about 3 years now! I currently work as an IT Support Technician.',
    'academic' => 'I am currently in the AAS program for Full-Stack Programming, which I hope to complete this upcoming year. I’m considering completing an AA degree as well in case I decide on transferring to a 4-year degree, but I’m not sure yet.',
    'subject' => 'My interest in computers and IT has been a constant my whole life, but I’ve only started programming seriously since the start of my degree here at CPCC.',
    'platform' => 'My primary computer platform is my desktop PC, which runs Windows 11 Home version 23H2.',
    'course1' => 'WEB215 - Advanced Markup and Scripting: I’m taking this course to learn more about front-end mechanics. It’s also required for my AAS program.',
    'course2' => 'WEB250 - Database Driven Websites: I’m taking this course to learn how to incorporate SQL into website creation. It’s also required for my AAS program.',
    'course3' => 'CTS240 - Project Management: I’m taking this course to learn how to better manage and plan projects. It’s also required for my AAS program.',
    'course4' => 'CSC221 - Advanced Python Programming: I’m taking this course to hone my skills in advanced Python concepts. It’s also required for my AAS program.',
    'fact' => 'I have a rare blood condition called beta Thalassemia minor, which causes a lack of hemoglobin as well as healthy red blood cells. Harmless for the most part, though!'
];

// Override defaults if form was submitted
$data = $_SERVER["REQUEST_METHOD"] === "POST" ? $_POST : $defaults;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro Page</title>
    <link rel="stylesheet" href="./styles/default.css">
</head>
<body>
    <h2>Introduction</h2>

    <!-- Display intro section -->
    <main>
        <figure>
            <img src="<?= htmlspecialchars($data['image']) ?>" alt="<?= htmlspecialchars($data['alt']) ?>">
            <figcaption><i><?= htmlspecialchars($data['caption']) ?></i></figcaption>
        </figure>
        <br>
        <ol class="introduction">
            <li><strong>Personal Background:</strong> <?= htmlspecialchars($data['personal']) ?></li>
            <li><strong>Academic Background:</strong> <?= htmlspecialchars($data['academic']) ?></li>
            <li><strong>Background in this Subject:</strong> <?= htmlspecialchars($data['subject']) ?></li>
            <li><strong>Primary Computer Platform: </strong> <?= htmlspecialchars($data['platform']) ?></li>
            <li><strong>Courses I'm Taking &#38; Why:</strong>
                <ol>
                    <li><strong>1. </strong><?= htmlspecialchars($data['course1']) ?></li>
                    <li><strong>2. </strong><?= htmlspecialchars($data['course2']) ?></li>
                    <li><strong>3. </strong><?= htmlspecialchars($data['course3']) ?></li>
                    <li><strong>4. </strong><?= htmlspecialchars($data['course4']) ?></li>
                </ol>
            </li>
            <li><strong>Funny/Interesting Fact About Me:</strong> <?= htmlspecialchars($data['fact']) ?></li>
        </ol>
    </main>

    <hr>

    <!-- Editable form -->
    <form method="post">
        <label>Image URL: <input type="text" name="image" value="<?= htmlspecialchars($data['image']) ?>"></label>
        <label>Image Alt Text: <input type="text" name="alt" value="<?= htmlspecialchars($data['alt']) ?>"></label>
        <label>Caption: <input type="text" name="caption" value="<?= htmlspecialchars($data['caption']) ?>"></label>

        <label>Personal Background: <textarea name="personal"><?= htmlspecialchars($data['personal']) ?></textarea></label>
        <label>Academic Background: <textarea name="academic"><?= htmlspecialchars($data['academic']) ?></textarea></label>
        <label>Background in this Subject: <textarea name="subject"><?= htmlspecialchars($data['subject']) ?></textarea></label>
        <label>Primary Computer Platform: <textarea name="platform"><?= htmlspecialchars($data['platform']) ?></textarea></label>

        <label>Course 1: <input type="text" name="course1" value="<?= htmlspecialchars($data['course1']) ?>"></label>
        <label>Course 2: <input type="text" name="course2" value="<?= htmlspecialchars($data['course2']) ?>"></label>
        <label>Course 3: <input type="text" name="course3" value="<?= htmlspecialchars($data['course3']) ?>"></label>
        <label>Course 4: <input type="text" name="course4" value="<?= htmlspecialchars($data['course4']) ?>"></label>

        <label>Funny/Interesting Fact: <textarea name="fact"><?= htmlspecialchars($data['fact']) ?></textarea></label>

        <button type="submit">Update My Intro</button>
    </form>
</body>
</html>