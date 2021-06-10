@extends('principal')

@section('contenido')
    <template v-if="menu == 0">
        <example-component></example-component>
    </template>
    <template v-if="menu == 1">
        <h1>Soy el menu de ventas</h1>
    </template>
    <template v-if="menu == 2">
        <h1>Soy el menu de clientes</h1>
    </template>
    <template v-if="menu == 3">
        <h1>Soy el menu de compras</h1>
    </template>
    <template v-if="menu == 4">
        <h1>Soy el menu de proveedores</h1>
    </template>
    <template v-if="menu == 5">
        <h1>Soy el menu de categorias</h1>
    </template>
    <template v-if="menu == 6">
        <h1>Soy el menu de productos</h1>
    </template>
    <template v-if="menu == 7">
        <h1>Soy el menu de usuarios</h1>
    </template>
@endsection
