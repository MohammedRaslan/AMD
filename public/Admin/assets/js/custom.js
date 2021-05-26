jQuery(document).ready(function ($){
  function ajaxload(url=null,fatherdiv,id=null,append=null){
    url = id==null? url: url+"/"+id;
    var jqxhr = $.get(url, function(data) {
      $("."+fatherdiv).fadeOut(3,function(){
          $(this).empty();
          $(this).html(data);
          if(append !== null){
              $(this).append(append);
          }
          $(this).fadeIn();
      });
    }).done(function() {
    return true;
  }).fail(function(data){
      return false;
  });
}
    $(document).on('click','.changeUserStatus',function(){
        $this = $(this);
        $this.prop('disabled',true);
        $id = $this.attr('id');
        $.ajax({
          url: '/user/changeStatus/'+$id,
          type: 'get',
          dataType: 'JSON',
          success: function(response){
            if(response['status'] == true){
                 $this.prop('disabled',false);

              if(response['type'] == 1){
                 $this.removeClass('btn-danger').addClass('btn-success');
                swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
                $this.text('Active')
              }else{
                $this.removeClass('btn-success').addClass('btn-danger');
                swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
                $this.text('Deactive');
              }
            }
      }
    });
    });

    $(document).on('click','.delete-user',function(event){

      swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $this =$(this);
          event.preventDefault();
          $id = $this.attr('id');
          $.ajax({
              url: '/user/delete/'+$id,
              type: 'get',
              dataType: 'JSON',
              success: function(response){
                if(response == true){
                   $this.closest('tr').fadeOut();
                   swal.fire("The User Was Deleted!", {
                    icon: "success",
                  });
                }else{
                    swal.fire("Your User file is safe!");
                }
          }
      });
        }
      })

    
    });


    $(document).on('click','.delete-brand',function(event){

      swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $this =$(this);
          event.preventDefault();
          $id = $this.attr('id');
          $.ajax({
              url: '/brand/delete/'+$id,
              type: 'get',
              dataType: 'JSON',
              success: function(response){
                if(response == true){
                   $this.closest('tr').fadeOut();
                   swal.fire("The Brand Was Deleted!", {
                    icon: "success",
                  });
                }else{
                    swal.fire("Your Brand file is safe!");
                }
          }
      });
        }
      })

    
    });


    // Category INDEX
    $(document).on('submit','#category-form',function(event){
      event.preventDefault();
      $title = $('.category-name').val();
      $.ajax({
        url: "/category",
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData:false,
        success: function(response){
          if(response['status'] == true){
            $tr = `<tr role="row" class="even">
                      <td class="sorting_1">`+response['id']+`</td>
                      <td><p class="category-`+response['id']+`">`+$title+`</p></td>
                      <td><button class="btn btn-success btn-sm changeCategoryStatus" id="`+response['id']+`">Active</button></td>
                      <td class=" d-table-row"><button class="edit-category-modal btn btn-primary btn-sm" data-attr-title="`+$title+`" data-attr-id="`+response['id']+`" type="button" data-toggle="modal" data-target="#edit-category-modal" style="background-color:#3c8dbc; border-color:#367fa9"> <i class="fa fa-edit"></i></button>
                      </td>
            </tr>`;
            $('#categories-table tbody').append($tr);
              swal.fire("Company Info Updated", "Thank You For Your Trust!", "success");
          }else{
              swal.fire("Company Info Not Updated", "There is something wrong!", "warning");
  
          }
  
        },
    });
    });

    $(document).on('click','.edit-category-modal',function(){
      $this = $(this);
      $id   = $this.attr('data-attr-id');
      $title = $this.attr('data-attr-title');
      $('#category_id').val($id);
      $('.category-name-edit').val($title);
    });

    $(document).on('submit','#edit-category-form',function(event){
      event.preventDefault();
      $id = $('#category_id').val();
      $.ajax({
        url: "/category/"+$id,
        method: 'post',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData:false,
        success: function(response){
          if(response['status'] == true){
              $('.category-'+$id).text(response['title']);
              swal.fire("Company Info Updated", "Thank You For Your Trust!", "success");
          }else{
              swal.fire("Company Info Not Updated", "There is something wrong!", "warning");
  
          }
  
        },
    });
    });

    $(document).on('click','.changeCategoryStatus',function(){
      $this = $(this);
      $this.prop('disabled',true);
      $id = $this.attr('id');
      $.ajax({
        url: '/category/changeStatus/'+$id,
        type: 'get',
        dataType: 'JSON',
        success: function(response){
          if(response['status'] == true){
               $this.prop('disabled',false);

            if(response['type'] == 1){
               $this.removeClass('btn-danger').addClass('btn-success');
              swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
              $this.text('Active')
            }else{
              $this.removeClass('btn-success').addClass('btn-danger');
              swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
              $this.text('Deactive');
            }
          }
    }
  });
  });
  $(document).on('click','.changeVariationStatus',function(){
    $this = $(this);
    $this.prop('disabled',true);
    $id = $this.attr('id');
    $.ajax({
      url: '/variation/changeStatus/'+$id,
      type: 'get',
      dataType: 'JSON',
      success: function(response){
        if(response['status'] == true){
             $this.prop('disabled',false);

          if(response['type'] == 1){
             $this.removeClass('btn-danger').addClass('btn-success');
            swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
            $this.text('Active')
          }else{
            $this.removeClass('btn-success').addClass('btn-danger');
            swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
            $this.text('Deactive');
          }
        }
  }
});
});

  


  //Tag INDEX
  $(document).on('submit','#tag-form',function(event){
    event.preventDefault();
    $title = $('.tag-name').val();
    $.ajax({
      url: "/tag",
      method: 'POST',
      data: new FormData(this),
      dataType: 'JSON',
      contentType: false,
      cache: false,
      processData:false,
      success: function(response){
        if(response['status'] == true){
          $tr = `<tr role="row" class="even">
                    <td class="sorting_1">`+response['id']+`</td>
                    <td><p class="tag-`+response['id']+`">`+$title+`</p></td>
                    <td><button class="btn btn-success btn-sm changeTagStatus" id="`+response['id']+`">Active</button></td>
                    <td class=" d-table-row"><button class="edit-tag-modal btn btn-primary btn-sm" data-attr-title="`+$title+`" data-attr-id="`+response['id']+`" type="button" data-toggle="modal" data-target="#edit-tag-modal" style="background-color:#3c8dbc; border-color:#367fa9"> <i class="fa fa-edit"></i></button>
                    </td>
          </tr>`;
          $('#tags-table tbody').append($tr);
            swal.fire("Tag Updated", "Thank You For Your Trust!", "success");
        }else{
            swal.fire("Tag Info Not Updated", "There is something wrong!", "warning");

        }

      },
  });
  });

  $(document).on('click','.edit-tag-modal',function(){
    $this = $(this);
    $id   = $this.attr('data-attr-id');
    $title = $this.attr('data-attr-title');
    $('#tag_id').val($id);
    $('.tag-name-edit').val($title);
  });

  $(document).on('submit','#edit-tag-form',function(event){
    event.preventDefault();
    $id = $('#tag_id').val();
    $.ajax({
      url: "/tag/"+$id,
      method: 'post',
      data: new FormData(this),
      dataType: 'JSON',
      contentType: false,
      cache: false,
      processData:false,
      success: function(response){
        if(response['status'] == true){
            $('.tag-'+$id).text(response['title']);
            swal.fire("Tag Updated", "Thank You For Your Trust!", "success");
        }else{
            swal.fire("Tag Not Updated", "There is something wrong!", "warning");

        }

      },
  });
  });

  $(document).on('click','.changeTagStatus',function(){
    $this = $(this);
    $this.prop('disabled',true);
    $id = $this.attr('id');
    $.ajax({
      url: '/tag/changeStatus/'+$id,
      type: 'get',
      dataType: 'JSON',
      success: function(response){
        if(response['status'] == true){
             $this.prop('disabled',false);

          if(response['type'] == 1){
             $this.removeClass('btn-danger').addClass('btn-success');
            swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
            $this.text('Active')
          }else{
            $this.removeClass('btn-success').addClass('btn-danger');
            swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
            $this.text('Deactive');
          }
        }
  }
});
  });

  $(document).on('click','.changeProductStatus',function(){
    $this = $(this);
    $this.prop('disabled',true);
    $id = $this.attr('id');
    $.ajax({
      url: '/product/changeStatus/'+$id,
      type: 'get',
      dataType: 'JSON',
      success: function(response){
        if(response['status'] == true){
            $this.prop('disabled',false);

          if(response['type'] == 1){
            $this.removeClass('btn-danger').addClass('btn-success');
            swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
            $this.text('Active')
          }else{
            $this.removeClass('btn-success').addClass('btn-danger');
            swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
            $this.text('Deactive');
          }
        }
  }
  });
  });

  $(document).on('click','.delete-product',function(event){

    swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $this =$(this);
        event.preventDefault();
        $id = $this.attr('id');
        $.ajax({
            url: '/product/delete/'+$id,
            type: 'get',
            dataType: 'JSON',
            success: function(response){
              if(response == true){
                 $this.closest('tr').fadeOut();
                 swal.fire("The Product Was Deleted!", {
                  icon: "success",
                });
              }else{
                  swal.fire("Your Product file is safe!");
              }
        }
    });
      }
    })

  
  });

  $(document).on('change','.couponType',function(){
    $this = $(this);
    $selected_option = $('#SelectType option:selected');
    if($selected_option.val() == 2){
      $('#min_price').val('');
      $('#min_price').attr('disabled',true);
    }else if($selected_option.val() == 1){
      $('#min_price').attr('disabled',false);
    }
  });


  $(document).on('click','.changeCountryStatus',function(){
    $this = $(this);
    $this.prop('disabled',true);
    $id = $this.attr('id');
    $.ajax({
      url: '/country/changeStatus/'+$id,
      type: 'get',
      dataType: 'JSON',
      success: function(response){
        if(response['status'] == true){
            $this.prop('disabled',false);

          if(response['type'] == 1){
            $this.removeClass('btn-danger').addClass('btn-success');
            swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
            $this.text('Active')
          }else{
            $this.removeClass('btn-success').addClass('btn-danger');
            swal.fire("Status Changeed", "Thank You For Your Trust!", "success");
            $this.text('Deactive');
          }
        }
  }
  });
  });
  

  $(document).on('change','.selectStatus',function(){
      $this = $(this);
      $order_id = $this.attr('data-order-id');
      $status = $this.val();
      $.ajax({
        url: '/order/changeStatus/'+$order_id+'/'+$status,
        type: 'get',
        dataType: 'JSON',
        success: function(response){
          if(response == true){
  
              swal.fire("Status Changed", "Thank You For Your Trust!", "success");
      
          }
    }
    });
  });


  $array = [];
  $(document).on('change','.category-choose',function(){
      $this = $(this);
      $id = $this.attr('id');
      var value = $(this).val();
      if(!$array.includes(value)){
        $array.push($(this).val());
      }else{
        $array.splice($array.indexOf($(this).val()) , 1);
      }
    //   $.ajax({
    //     url: '/category/brands/'+$array,
    //     type: 'get',
    //     dataType: 'JSON',
    //     success: function(response){
    //       if(response == true){
  
    //           swal.fire("Status Changed", "Thank You For Your Trust!", "success");
      
    //       }
    // }
    // });
      ajaxload('/category/brands/'+$array,'Category-Father');
  });

  $(document).on('change','.varation_number',function(){
    $('.variation-row').empty();
    
    $data = `
            <input type="text" class="form-control mb-2" name="items[]"  id="inputEmail4"  placeholder="item" required>`;
    $alert = `<div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
           You Can't add More Than 6 Items.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     
    </button>
  </div>`;
    $value = $(this).val();
    if($value < 7){

        for($i = 0 ; $i < $value; $i++){
          $('.variation-row').append($data);
        }
    }else{
      $('.variation-row').append($alert);
    }
  });
});