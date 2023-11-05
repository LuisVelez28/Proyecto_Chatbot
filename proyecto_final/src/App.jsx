
import { useState } from 'react'
import 'bootstrap/dist/css/bootstrap.min.css';
import './App.css'
import Header from './components/header/Header';
import Home from './components/home/Home';
import Productos from './components/productos/Productos';

import { BrowserRouter as Router, Route, Switch } from "react-router-dom";




function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <div>
        <Header />
        <Home />
      </div>
      <Router>
        <Switch>
          <Route exact path="/" component={Componente1} />
          <Route path="/componente2" component={Componente2} />
          <Route component={NotFound} />
        </Switch>
      </Router>

    </>
  )
}

export default App;

