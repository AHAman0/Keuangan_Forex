<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-3">
                <h2 class="card-header">Your Profile</h2>
                <div class="card-body">
                    <?php if ($account): ?>
                        <p><strong>Username:</strong> <?php echo htmlspecialchars($account['username']); ?></p>
                        <p><strong>Name:</strong> <?php echo htmlspecialchars($account['nama']); ?></p>
                        <!-- Add more fields as necessary -->
                    <?php else: ?>
                        <p>The account was Guest. You cannot access unless you Login or Signup first.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>