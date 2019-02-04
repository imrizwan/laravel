<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/">TodoList</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
          <li class="{{Request::is('/') ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="{{Request::is('todo/create') ? 'nav-item active' : 'nav-item'}}">
              <a class="nav-link" href="todo/create">Create Todo</a>
            </li>
          </ul>
        </div>
      </nav>