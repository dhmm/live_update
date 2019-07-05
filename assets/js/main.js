let userIds = new Array();

function load() {
  $.ajax({
    url: "users.php"
  }).done(function(data) {       
    if(data !== null) {
      let processedIds = new Array();

      data.forEach(function(user){
        let id = user.id;
        let surname = user.surname;
        let name = user.name;
        let age = user.age;

        let newTr = '<tr id="user_'+id+'"><td>'+surname+'</td><td>'+name+'</td><td>'+age+'</td></tr>';
        let existsingTr = '<td>'+surname+'</td><td>'+name+'</td><td>'+age+'</td>';

        if(userIds.includes(id)) {          
          //Update
          $('#usersTableData #user_'+id).html(existsingTr);
          processedIds.push(id);
        } else {          
          //Insert
          userIds.push(id);
          $('#usersTableData').append(newTr);
          processedIds.push(id);
        }                        
      });

      userIds.forEach(function(existingId) {
        if(processedIds.includes(existingId) === false) {
            $('#usersTableData #user_'+existingId).remove();
        }
      })
    }  
  }); 
}
$(document).ready(function(){
  setInterval(load, 500);    
})