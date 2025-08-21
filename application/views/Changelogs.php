<div class="container mt-5">
    <h1 class="mb-4 text-center">Change-Logs</h1>
    <ul class="list-group">
        <?php if(!empty($logs)): ?>
            <?php foreach($logs as $log): ?>
                <li class="list-group-item text-start">
                    <div class="d-flex justify-content-between">
                        <strong><?php echo htmlspecialchars($log['message']); ?></strong>
                        <small><?php echo htmlspecialchars($log['author'] . ' | ' . $log['date']); ?></small>
                    </div>
                    <?php if(!empty($log['body'])): ?>
                        <p class="mt-2 mb-0"><?php echo nl2br(htmlspecialchars($log['body'])); ?></p>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="list-group-item">No commits found.</li>
        <?php endif; ?>
    </ul>
</div>