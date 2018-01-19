<template>
    <div class="bg-patterns p-5">
         <h4 class="card-title text-center">Please Talk To Us</h4>
         <form action="">
           <div class="form-row ">
            <!-- name -->
            <div class="form-group col-md-4">
                <label for="name">Your name</label>
                <input type="text" class="form-control is-valid" placeholder="name" id="name">
                <p class="form-text text-success">Your name field is required</p>    
            </div>
            <!-- email address -->
            <div class="form-group col-md-4">
               <label for="email">Your Email Address</label>
               <input type="text" class="form-control" placeholder="email" id="email">
           </div>
       </div>

   </form>
</div>
</template>

<script>
    export default
    {
        props:[],

        data(){
            return {

            }
        }
    }
</script>
