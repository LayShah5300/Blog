@extends('admin/layouts/app')

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
     
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card" >
        <div class="card-header">
          <h3 class="card-title">Categories</h3>
             <a class="col-lg-9" href="{{route('category.create')}}">Add New</a>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
         <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Index</th>
                    <th>Category name</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                        
                            <tr>
                              <td>{{$loop-> index+1}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}} </td>
                        <td><a href="{{route('category.edit',$category->id)}}">Edit</a></td>
                        <td><form id="delete-form-{{$category->id}}"style="display:none" method="post"action="{{ route('category.destroy',$category->id)}}"> 
                        @csrf  
                        {{method_field('DELETE')}}
                        </form>
                          <a href=""  onclick="if(confirm('Are you Sure?'))
                          { 
                            event.preventDefault();
                            document.getElementById('delete-form-{{$category->id}}').submit();
                          }
                          else
                          {event.preventDefault();
                            }">Delete</a></td>
                    
                             </tr>
                        
                    @endforeach
                 
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Index</th>
                    <th>Category name</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                  </tfoot>
                </table>
                <div class="fa-pull-right">
                
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
              }
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection