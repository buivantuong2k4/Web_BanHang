$(document).ready(function() {
    
view_data();

    function view_data(){
        $.ajax({
            method:"post",
            url:'?quanly=giohang&action=ajax',
            data:{}
            
        })
        .done(function (data) {
          $(".modal-body").html(data)
      
          
        })
        .fail(function (data) {
            alert("lỗi")
        })
    }
    function view_comments(){
        $.ajax({
            method:"post",
            url:'?quanly=shop&action=list_comment',
            data:{idsp:$('#idsp').val()}
            
        })
        .done(function (data) {
          $(".comments").html(data)
      
          
        })
        .fail(function (data) {
            alert("lỗi")
        })
    }
    function delete_comment(id){
        $.ajax({
            method:"post",
            url:'?quanly=shop&action=delete_comment',
            data:{id_comment:id}
            
        })
        .done(function (data) {
         view_comments();
      
          
        })
        .fail(function (data) {
            alert("lỗi")
        })
    }

    $(document).on('click','.delete',function(){
        var id=$(this).val();
        $.ajax({
            method:"post",
            url:'?quanly=giohang&action=ajax_xoa',
            data:{idsp :id}
            
        })
        .done(function (data) {
         view_data()
       
          
        })
        .fail(function (data) {
            alert("lỗi")
        })
    })

    $(".add_cart").click( function() {
        var id=$(this).val();
      
        $.ajax({
            method:"post",
            url:'?quanly=giohang&action=ajax_add',
            data:{idsp :id}
            
        })
        .done(function (data) {
         view_data()
         alert("Thêm thành công")
          
        })
        .fail(function (data) {
            alert("lỗi")
        })
    })
    $(".btn-comment").click( function() {
        var comment =$('#comment').val();
        var idsp =$('#idsp').val();
        $.ajax({
            method:"post",
            url:'?quanly=shop&action=comment',
            data:{comment: comment,idsp: idsp}
            
        })
        .done(function (data) {
           view_comments();
          alert("bình luận thành công")
            $("#comment").val('')
          
        })
        .fail(function (data) {
            alert("lỗi")
        })
    })
    $(".btn-danhgia").click( function() {
        view_comments();
    })
    $(document).on('click','#id_comment',function(){
    var id=$(this).val();
        delete_comment(id);

    })
})

