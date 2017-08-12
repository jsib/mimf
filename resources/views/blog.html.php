<?php $this->extend('base') ?>

<?php $this->start('body') ?>
    <br/>
    <div class="container">
        <!-- Navigation bar -->
        <nav class="navbar navbar-inverse bg-inverse">
            <!--<a class="navbar-brand" href="#">Main</a>-->
            <ul class="navbar-right">
                <li class="my-nav-item">
                    Пользователь
                </li>
                <li class="my-nav-button">
                    <button type="button" class="btn btn-default navbar-btn">Войти</button>
                </li>

            </ul>
        </nav>
        <!-- //Navigation bar -->


        <h1 align="center">Задачник</h1>
        <br/>
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
            data-target="#addPostModal">
            <span class="glyphicon glyphicon-plus"></span> Добавить задачу
        </button>
        <br/><br/>
        <div id="postsList"></div>
        <div id="addPostModal" class="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="addPostForm">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Добавить задачу</h3>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger hidden" role="alert" id="submitAnswer">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                <span id='answerText'></span>
                            </div>
                            <div class="form-group">
                              <label for="inputTitle">Имя пользователя</label>
                              <input type="text" data-noempty class="form-control" id="inputTitle" placeholder="Имя пользователя" required>
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail">E-mail</label>
                              <input type="text" data-noempty class="form-control" id="inputEmail" placeholder="E-mail" required>
                              <div class="help-block with-errors"></div>
                            </div>                           
                            <div class="form-group">
                              <label for="inputText">Текст задачи</label>
                              <textarea data-noempty class="form-control" id="inputText" placeholder="Текст задачи" rows="7" required></textarea>
                              <div class="help-block with-errors"></div>
                            </div>                       
                            <div class="form-group">
                              <label for="inputPicture">Картинка (320*240)</label>
                              <textarea data-noempty class="form-control" id="inputPicture" placeholder="Картинка (320*240)" rows="7" required></textarea>
                              <div class="help-block with-errors"></div>
                            </div>                       
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                <button type="submit" class="btn btn-primary" id="addButton">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
        <div id="editPostModal" class="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="editPostForm">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Edit post</h3>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger hidden" role="alert" id="submitAnswer">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                <span id='answerText'></span>
                            </div>
                            <div class="form-group">
                              <label for="inputTitle">Title</label>
                              <input type="text" data-noempty class="form-control" id="inputTitle" placeholder="Title" required>
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                              <label for="inputText">Text</label>
                              <textarea data-noempty class="form-control" id="inputText" placeholder="Text" rows="7" required></textarea>
                              <div class="help-block with-errors"></div>
                            </div>                       
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="editButton">Save</button>
                            </div>
                        </div>
                        <input type='hidden' id="inputId" name='id' value=''>
                    </form>
                </div>
            </div>
        </div>                
    </div>
<?php $this->stop('body') ?>

<?php $this->start('script') ?>
    <script>
        
    </script>
<?php $this->stop('script') ?>