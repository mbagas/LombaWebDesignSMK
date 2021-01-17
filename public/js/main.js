//navbar
function collapse() {
    var x = document.getElementById("nav");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}

//modal
var login = document.getElementById('login');
var sign = document.getElementById('signup');

window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
    if (event.target == sign) {
        sign.style.display = "none";
    }
}

    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#showgambar').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
    }

    $("#inputgambar").change(function () {
      readURL(this);
    });

    $(document).on('change', ':file', function() {
    var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
    });

    $(document).ready( function() {
    $(':file').on('fileselect', function(event, numFiles, label) {
      console.log(numFiles);
      console.log(label);
    });
});

//smoothScroll
window.smoothScroll = function(target){
  var scrollContainer = target;

  do{
    scrollContainer = scrollContainer.parentNode;
    if(!scrollContainer) return;
    scrollContainer.scrollTop +=1;
  }while(scrollContainer.scrollTop == 0);

  var targetY= 0;
  do{
    if(target == scrollContainer) break;
    targetY += target.offsetTop;
  }while(target == target.offsetParent);

  scroll = function(c,a,b,i){
    i++;
    if ( i > 30 ) return;
    c.scrollTop = a + (b-a) / 30 * i;
    setTimeout(function(){
      scroll(c,a,b,i);
    },20);
  }
  scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
