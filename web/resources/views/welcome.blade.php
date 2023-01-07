<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Livewire DataTable Example - Tutsmake.com</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />
</head>
<body>
  <div class="container">
      <div class="row">
        <div class="col col-12">
          <div class="card">
            <div class="card-header">
              Laravel 9 Livewire DataTable Example - Tutsmake.com
            </div>
            <div class="card-body">
              <livewire:user-datatables
                  searchable="name, email"
                  exportable
              />
            </div>
          </div>
        </div>
      </div>
  </div>
</body>
@livewireScripts
</html>