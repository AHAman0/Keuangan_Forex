<body>
    <div class="container mt-2">
        <div class="justify-content-center">
            <h3>Welcome,</h3>
            <?php if (isset($account) && $account): ?>
            <h3><?= htmlspecialchars($account['username']); ?>!</h3>
            <?php else: ?>
            <h3>Guest!</h3>
            <?php endif; ?>
            <h4>This is a Financially corrected automatically Forex. Please be awaited</h4>
        </div>
    </div>
</body>