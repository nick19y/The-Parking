<?php

namespace Config;


// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);



/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/codigoDeSeguranca','Home::codigoDeSeguranca');
$routes->get('/criarConta','Home::criarConta');
$routes->get('/iniciarSessao','Home::iniciarSessao');
$routes->get('/mensagemContaCriada','Home::mensagemContaCriada');
$routes->get('/recuperarSenha','Home::recuperarSenha');
$routes->get('/redefinirSenha','Home::redefinirSenha');
$routes->get('/senhaRedefinidaMensagem', 'Home::senhaRedefinidaMensagem');
$routes->get('/graficos', 'Home::graficos');
$routes->get('/faturamento', 'Home::faturamento');
$routes->get('/preco', 'Home::preco');

$routes->get("admin/", "Admin\AutenticacaoAdmin::login");
$routes->post('/admin/logar', "Admin\AutenticacaoAdmin::logar");
$routes->post('/admin/novo', "Admin\AutenticacaoAdmin::cadastrar");

$routes->group('admin', ['filter'=>'admin'], function($routes){
    
    $routes->get('atualizacao', 'Admin\Atualizacao::atualizacao');
    $routes->post('atualizacao/salvarPrecoMoto', 'Admin\Atualizacao::salvarPrecoCarro');
    $routes->post('atualizacao/salvarPrecoCarro', 'Admin\Atualizacao::salvarPrecoMoto');
    $routes->post('atualizacao/salvarDadosFuncionario', 'Admin\Atualizacao::salvarDadosFuncionario');

    
    
    $routes->get('historico', 'Admin\Historico::historico');
    
    $routes->get('registro', 'Admin\Registro::index');
    $routes->post('registro/remover/(:num)', 'Admin\Registro::remover/$1');
    $routes->post('registro/registrar', 'Admin\Registro::registrar');
    $routes->post('registro/setHorarioSaida', 'Admin\Registro::setHorarioSaida');
    $routes->get('registro/buscar/(:num)', 'Admin\Registro::buscarRegistro/$1');



    $routes->get("sair", "Admin\AutenticacaoAdmin::sair");
});
    

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
