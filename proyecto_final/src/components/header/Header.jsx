import React from 'react';
import "./header.css";
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';

const Header = () => {
  return (
    <div>
      <Navbar expand="lg" className="bg-custom">
        <Container>
          <Navbar.Brand href="#home">La Plancha</Navbar.Brand>
          <Navbar.Toggle aria-controls="basic-navbar-nav" />
          <Navbar.Collapse id="basic-navbar-nav">
            <Nav className="ms-auto">
              <Nav.Link href="#home">Inicio</Nav.Link>
              <Nav.Link href="#sobre Nosotros">Sobre Nosotros</Nav.Link>
              <Nav.Link href="#contactanos">Contactanos</Nav.Link>
              
            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>




    </div>
  )
}

export default Header