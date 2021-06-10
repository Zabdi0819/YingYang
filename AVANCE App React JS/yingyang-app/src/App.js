import React from 'react';
import NavBar from './Components/NavBar';
import { Container } from '@material-ui/core';
import './App.css';
import Slides from './Components/Slides';
import BannerTop from './Components/BannerTop';

function App() {
  const config = {
    systemName: 'YingYang.com'
  }
  return (
    <div className="App">
    <Container maxWidth={'lg'}>
      <header className="App-header">
        <NavBar systemName={config.systemName}/>
        <Slides></Slides>
        <BannerTop></BannerTop>
      </header>
      </Container>
    </div>
  );
}

export default App;
