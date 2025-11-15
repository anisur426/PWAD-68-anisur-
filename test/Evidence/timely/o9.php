<?php
// Student name = key, score = value
$students = [
    "Rahim" => 85,
    "Karim" => 92,
    "Hasan" => 78,
    "Rakib" => 95,
    "Anis"  => 88
];

// Max score বের করা
$maxScore = max($students);

// যে ছাত্রের সর্বোচ্চ স্কোর
$topStudent = array_search($maxScore, $students);
?>

<h2>Student Result Sheet</h2>

<table style="border: 1px solid black; border-collapse: collapse;">
    <tr>
        <th style="border: 1px solid black; padding: 8px;">Name</th>
        <th style="border: 1px solid black; padding: 8px;">Score</th>
    </tr>

    <!-- টেবিলে ডেটা দেখানো -->
    <?php foreach ($students as $name => $score) { ?>
        <tr>
            <td style="border: 1px solid black; padding: 8px;"><?php echo $name; ?></td>
            <td style="border: 1px solid black; padding: 8px;"><?php echo $score; ?></td>
        </tr>
    <?php } ?>
</table>

<h3>
    Highest Score: <?php echo $maxScore; ?> <br>
    Top Student: <?php echo $topStudent; ?>
</h3>
