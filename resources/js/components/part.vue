<template>
    <div>
        <h3>
            Parts
        </h3>
        <ul>
            <li v-for="part in parts" :key="part.id">
                {{ part.title }}
            </li>
        </ul>
    </div>
</template>

<script>
export default{
    data(){
        return {
            parts:[]
        }
    },
    beforeCreate(){
        axios.get('http://laravelvuetailwindtodo.test/api/part').then((response)=>{
            this.parts = response.data;
        })
    }
}
</script>
