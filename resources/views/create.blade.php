<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>

</head>
<body>
<h1>sample</h1>
<div id="app">
    <example-component></example-component>
    <model-component v-model="searchText"></model-component>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script>
    createApp({
        // 省略
    })
        .component('example-component', ExampleComponent) // 👈 ここでセットしています
        .component('model-component', ModelComponent)
        .mount('#app');

</script>
</body>
</html>
