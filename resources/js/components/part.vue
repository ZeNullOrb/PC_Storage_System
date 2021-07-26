<template>
<div>
    <h3>
        Parts
    </h3>
    <button @click ="createPart()">Create Part</button>
    <ul>
        <li
        class = "border-blue-800 border-l-4 bg-blue-100 px-2"
        v-for="(part,partKey) in parts" :key = "partKey">
        <button class = "text-red-400" @click="deletePart(partKey)">X</button>
        <button class = "text-red-400" @click="editPart(partKey)">E</button>
            {{ part.title }}
        </li>
    </ul>
</div>
</template>

<script>
export default {
data: () => {
    return {
        parts: []
    }
},
created() {
    this.getParts()
},
methods:{
    getParts() {
        axios.get('http://laravelvuetailwindtodo.test/api/part')
        .then(response => {
            this.parts = response.data
        }).catch(response => {
            console.log(response)
            alert('Error')
        })
    },
    deletePart(partKey) {
        axios.delete('http://laravelvuetailwindtodo.test/api/part/' + this.parts[partKey].id)
        .then(response => {
            alert('Part Deleted!')
            this.parts.splice(partKey, 1)
        }).catch(response => {
            console.log(response)
            alert('Error')
        })
    },
    createPart() {
        let part = prompt('Write Your Part')
        axios.post('http://laravelvuetailwindtodo.test/api/part', {title: part})
        .then(response => {
            alert('Part Saved!')
            this.parts.push(response.data.part)
        }).catch(response=>{
            console.log(response)
            alert('Error')
        })
    },
    editPart() {
        let partDB = this.parts[partKey];
        let part = prompt('Write Your Part', partDB.title)
        axios.put('http://laravelvuetailwindtodo.test/api/part/' + partDB.id,{title: part})
        .then(response => {
            alert('Part Saved!')
            this.parts[partKey].title = part
        }).catch(response=>{
            console.log(response)
            alert('Error')
        })
    }
},
}
</script>
