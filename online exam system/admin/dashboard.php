<?php
include '../includes/db.php';
include '../includes/header.php';
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../index.php');
    exit();
}
?>
<div class="container mt-5">
    <h2 class="mb-4">Welcome, <?php echo htmlspecialchars($_SESSION['full_name']); ?> (Admin)</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Create Exam</h5>
                    <p class="card-text">Set up new exams with scheduling and duration.</p>
                    <a href="create_exam.php" class="btn btn-primary mt-auto">Create Exam</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Manage Questions</h5>
                    <p class="card-text">Add, edit, or remove questions for your exams.</p>
                    <a href="manage_questions.php" class="btn btn-success mt-auto">Manage Questions</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">View Results</h5>
                    <p class="card-text">Analyze student performance and exam statistics.</p>
                    <a href="view_results.php" class="btn btn-info mt-auto">View Results</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 