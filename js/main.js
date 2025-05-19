//------------------------------------------------------------------------------
// const swiper = new Swiper('.swiper', {
//     loop: true,
//     pagination: {
//       el: '.swiper-pagination',
//       clickable: true,
//     },
//     breakpoints: {
//       480: {
//         slidesPerView: 1,
//         spaceBetween: 10,
//       },
//       768: {
//         slidesPerView: 2,
//         spaceBetween: 20,
//       },
//       1024: {
//         slidesPerView: 3,
//         spaceBetween: 30,
//       },
//     },
//   });
  
//------------------------------------------------------------------------------
function ask(title,yes,no,translate = true){
  Swal.fire({
      title:  title,
      showCancelButton: true,
      icon: 'question',
      iconHtml: '؟',
      cancelButtonText: 'لا',
      confirmButtonText: 'نعم',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
          yes()
      }else{
          no()
      }
  })

}
//------------------------------------------------------------------------------
$('.chk_all').on('click',function(){
  if($(this).is(':checked')){
      $('.chk_item').prop('checked',true)
  }else{
      $('.chk_item').prop('checked',false)
  }
})
//------------------------------------------------------------------------------
$('.delete').on('click',function(){
  let ids = [];
  let table = $(this).data('table');

  $('.chk_item').each(function(){
      if($(this).is(":checked")){
          ids.push($(this).val())
      }
  })

  if(ids.length > 0){
      ask('هل تريد الحذف',()=>{
          let formData = new FormData();
          formData.append('table',table);
          formData.append('ids',ids.join(','));
          $.ajax({
              url :'../controllers/delete.php',
              type:'POST',
              contentType: false,
              processData: false,
              async:false,
              data:formData,
              success:e=>{
                  // console.log(e)
                  makeAlert('تم الحذف بنجاح','success')
                  setTimeout(() => {
                      window.location.reload()
                  }, 500);
              },
              error:e=>{
                  console.log(e)
              }
          })  
      },()=>false)
  }else{
      // makeAlert('Select first','err')
  }
})
//------------------------------------------------------------------------------
function makeAlert(title,type,translate = false){
  if(type === 'success'){
      Swal.fire(
          '',
           title,
          'success'
      )
  }else if(type === 'err'){
      Swal.fire(
          '',
           title,
          'error'
      )
  }else if(type === 'warning'){
      Swal.fire(
          '',
           title,
          'warning'
      )
  }
}
//------------------------------------------------------------------------------


