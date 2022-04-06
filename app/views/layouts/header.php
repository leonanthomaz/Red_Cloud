<?php if(isset($_SESSION['erro'])): ?>
    <div class="row">
        <div class="alert alert-danger text-center p-2">
            <?php echo $_SESSION['erro'] ?>
            <?php unset($_SESSION['erro']); ?>
        </div>
    </div>
<?php endif; ?>