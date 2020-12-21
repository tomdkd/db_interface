$(document).ready(function(){
    getAllDatabasesStatus();

    setInterval(function(){
        getAllDatabasesStatus();
    }, 5000);
});

function getAllDatabasesStatus() {
    console.log('coucou');
}