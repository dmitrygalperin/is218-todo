<?php include 'header.php'; ?>
    <main class="container">
        <div class="card mt-3">
          <div class="card-header">
            Welcome, <?php echo($_SESSION['firstName'] . ' ' . $_SESSION['lastName']) ?>
          </div>
          <div class="card-body">
            <?php if(count($todos) == 0): ?>
              <p class="card-text">You do not have any todos.</p>
            <?php else: ?>
              <div id="incomplete-todos">
                <h3>Incomplete Todos</h3>
                <hr>
                <table class="table">
                  <thead>
                    <th>Title</th>
                    <th>Options</th>
                  </thead>
                    <?php foreach($todos as $todo): ?>
                      <?php if(!$todo->isCompleted): ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                </table>
              </div>
              <div id="complete-todos">
                <h3>Completed Todos</h3>
                <hr>
                <table class="table">
                  <thead>
                    <th>Title</th>
                    <th>Options</th>
                  </thead>
                    <?php foreach($todos as $todo): ?>
                      <?php if($todo->isCompleted): ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                </table>
              </div>
            <?php endif; ?>
            <form class="form-inline" action="?action=add_todo" method="POST">
              <div class="form-group mx-sm-3">
                <div class="input-group-addon">Title</div>
                <input type="text" class="form-control" id="title" name="title" placeholder="Todo title">
              </div>
              <div class="form-group mx-sm-3">
                <div class="input-group-addon">Due date</div>
                <input type="date" class="form-control" id="due-date" name="due-date">
              </div>
              <button type="submit" class="btn btn-primary">Add Todo</button>
            </form>
          </div>
        </div>
    </main>
<?php include 'footer.php'; ?>
