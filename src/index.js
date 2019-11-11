const express = require('express');
const morgan = require('morgan');
const handlerbars = require('express-handlebars');
const path = require('path');
//Inicializaciones
const app = express();
//Configuración
app.set('port', process.env.PORT || 4000);
app.set('views', path.join(__dirname));
app.engine('.hbs', handlerbars({
    defaultLayout: 'main', 
    layoutsDir: path.join(app.get('views'), 'layouts'), 
    partialsDir: path.join(app.get('views'), 'partials'), 
    extname: '.hbs', 
    helpers: require('./lib/handlebars')
}));
app.set('view engine', '.hbs');
//Middlewares
app.use(morgan('dev'));
app.use(express.urlencoded({extended: false}));
app.use(express.json());
//Variables Globales
app.use((req, res, next)=>{
    next()
});
//Rutas
app.use(require('./routes'));
app.use(require('./routes/authentications'));
app.use('links', require('./routes/links'));
//Público
app.use(express.static(path.join(__dirname, 'public')));
//Iniciar el servidor 
app.listen(app.get('port'), ()=>{
    console.log('Servidor en el puerto', app.get('port'))
})