<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Post a New Job</h1>
</header>

<section class="job-post-form">
    <form action="submit-job.php" method="post">
        <!-- Job Title -->
        <label for="job-title">Job Title:</label>
        <input type="text" id="job-title" name="job_title" required>

        <!-- Company Name -->
        <label for="company">Company Name:</label>
        <input type="text" id="company" name="company_name" required>

        <!-- Job Location -->
        <label for="location">Job Location:</label>
        <input type="text" id="location" name="job_location" required>

        <!-- Salary Range -->
        <label for="salary">Salary Range:</label>
        <input type="text" id="salary" name="salary" placeholder="$60,000 - $80,000/year" required>

        <!-- Job Description -->
        <label for="description">Job Description:</label>
        <textarea id="description" name="job_description" rows="6" required></textarea>

        <!-- Job Requirements -->
        <label for="requirements">Job Requirements:</label>
        <textarea id="requirements" name="job_requirements" rows="4" required></textarea>

        <!-- Submit Button -->
        <button type="submit">Post Job</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Job Portal. All rights reserved.</p>
</footer>

</body>
</html>
