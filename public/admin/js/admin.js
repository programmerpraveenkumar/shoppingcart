var functions={
    location:function(location){
        window.location.assign(ADMIN_PATH+location);
    },            
    con:function(){
       return confirm('Are you sure to delete');
    },
    delete:function(val){
      if(this.con())  {
          this.location('deleteindex?id='+val);
      }
    },
    deletegalleryphotos:function(album_id,photo_id){
        if(this.con())  {
          this.location('deletegallery?album_id='+album_id+'&photo_id='+photo_id);
      }
    }
    
    
};
