<?php include 'header.php'; ?>
    <main class="container">
      <?php include 'flashmessages.php'; ?>
        <div class="card mt-3">
          <div class="card-header bg-info text-white">
            Welcome, <?php echo($_SESSION['firstName'] . ' ' . $_SESSION['lastName']) ?>
          </div>
          <div class="card-body">
            <?php if(count($todos) == 0): ?>
              <p class="card-text">You do not have any todos.</p>
            <?php else: ?>
              <div id="incomplete-todos">
                <h3>Incomplete Todos</h3>
                <table class="table">
                  <thead>
                    <th>Title</th>
                    <th>Created on</th>
                    <th>Due date</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    <?php foreach($todos as $todo): ?>
                      <?php if(!$todo['isdone']): ?>
                        <tr>
                          <td><?php echo $todo['message'] ?></td>
                          <td><?php echo date("F j Y", strtotime($todo['createddate'])) ?></td>
                          <td><?php echo date("F j Y", strtotime($todo['duedate'])) ?></td>
                          <td>
                            <form style="display:inline" action="." method="POST">
                              <input type="hidden" name="action" value="delete_todo">
                              <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                              <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                            <a class="btn btn-sm btn-primary" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <form style="display:inline" action="." method="POST">
                              <input type="hidden" name="action" value="toggle_todo">
                              <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                              <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                            </form>
                          </td>
                        </tr>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <hr>
              <div id="complete-todos">
                <h3>Completed Todos</h3>
                <table class="table">
                  <thead>
                    <th>Title</th>
                    <th>Created on</th>
                    <th>Due date</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    <?php foreach($todos as $todo): ?>
                      <?php if($todo['isdone']): ?>
                        <tr>
                          <td><?php echo $todo['message'] ?></td>
                          <td><?php echo date("F j Y", strtotime($todo['createddate'])) ?></td>
                          <td><?php echo date("F j Y", strtotime($todo['duedate'])) ?></td>
                          <td>
                            <form style="display:inline" action="." method="POST">
                              <input type="hidden" name="action" value="delete_todo">
                              <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                              <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </form>
                            <a class="btn btn-sm btn-primary" href="#" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <form style="display:inline" action="." method="POST">
                              <input type="hidden" name="action" value="toggle_todo">
                              <input type="hidden" name="todo-id" value="<?php echo $todo['id'] ?>">
                              <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                            </form>
                          </td>
                        </tr>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            <?php endif; ?>
          </div>
          <div class="card-footer">
            <form class="form-inline" action="." method="POST">
              <input type="hidden" name="action" value="add_todo">
              <div class="form-group mx-sm-3">
                <label class="label" for="title">New todo:</label>
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
