<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
<div id="app">
        <input type="text" name="text" v-model="text">
      <button @click="addTodo">aggiungi</button>
      <ul>
        <li v-for="(value,index) in todoList">
            {{value.text}}
        </li>
      </ul>
    </div>
    <script src="./script.js"></script>
</body>
</html>