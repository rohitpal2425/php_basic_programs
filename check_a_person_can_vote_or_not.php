<?php
// Function to check voting eligibility based on age
function canVote($age) {
    if ($age >= 18) {
        return "You are eligible to vote.";
    } else {
        return "You are not eligible to vote yet.";
    }
}

// Example usage
$age = 21; // Replace with the person's age
echo canVote($age); // Output: You are eligible to vote.
?>
