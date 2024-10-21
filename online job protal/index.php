<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Job Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="https://imgs.search.brave.com/pZaL86_izdCHva5UR_SnKp5l0zofI6Pv3gnxQTxtacs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzA0LzQzLzYyLzAy/LzM2MF9GXzQ0MzYy/MDI1N184MmZpeEdm/NUZRRVRRcnBqRU5x/Mjc2aDEwTGVpTnZW/Ui5qcGc" alt="Logo" style="float: right; width: 100px; height: auto;">
    <h1>Welcome to Job Portal</h1>
    <p>Find your dream job here</p>
    <a href="job-post.php" class="post-job-btn">Post a Job</a>
</header>

<div class="search-bar">
    <input type="text" id="search-input" placeholder="Search jobs by title, company, or location...">
    <button onclick="searchJobs()">Search</button>
</div>

<section id="job-listings" class="job-listings">
    <div class="job-card">
        <h3>Frontend Developer</h3>
        <p>Company: TechCorp</p>
        <p>Location: Remote</p>
        <a href="job-detail.php" class="details-btn">Job Details</a>
        <a href="apply.php" class="apply-btn">Apply Now</a>
    </div>

    <div class="job-card">
        <h3>Backend Developer</h3>
        <p>Company: SoftSolutions</p>
        <p>Location: New York, NY</p>
        <a href="job-detail.php" class="details-btn">Job Details</a>
        <a href="apply.php" class="apply-btn">Apply Now</a>
    </div>

    <div class="job-card">
        <h3>Data Scientist</h3>
        <p>Company: DataWorks</p>
        <p>Location: San Francisco, CA</p>
        <a href="job-detail.php" class="details-btn">Job Details</a>
        <a href="apply.php" class="apply-btn">Apply Now</a>
    </div>
</section>

<footer>
    <p>&copy; 2024 Job Portal. All rights reserved.</p>
</footer>

<script>
// JavaScript function to filter jobs based on search input
function searchJobs() {
    const searchInput = document.getElementById("search-input").value.toLowerCase();
    const jobListings = document.getElementById("job-listings").getElementsByClassName("job-card");

    for (let i = 0; i < jobListings.length; i++) {
        const jobTitle = jobListings[i].getElementsByTagName("h3")[0].innerText.toLowerCase();
        const company = jobListings[i].getElementsByTagName("p")[0].innerText.toLowerCase();
        const location = jobListings[i].getElementsByTagName("p")[1].innerText.toLowerCase();

        if (jobTitle.includes(searchInput) || company.includes(searchInput) || location.includes(searchInput)) {
            jobListings[i].style.display = "";
        } else {
            jobListings[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>
