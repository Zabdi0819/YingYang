import React from 'react';
import NavBar from './Components/NavBar';
import { Container } from '@material-ui/core';
import './App.css';
import Slides from './Components/Slides';
import BannerTop from './Components/BannerTop';
import ProductSection from './Components/ProductSection';
import GallerySection from './Components/GallerySection';
import Contact from './Components/Contact';
import Footer from './Components/Footer';

function App() {
  const config = {
    systemName: 'StyleEtBeauté'
  }
  return (
    <div className="App">
    <Container maxWidth={'lg'}>
      <header className="App-header">
        <NavBar systemName={config.systemName}/>
        <Slides></Slides>
        <BannerTop></BannerTop>
        <ProductSection></ProductSection>
        <GallerySection></GallerySection>
        <Contact></Contact>
        <Footer></Footer>
      </header>
      </Container>
    </div>
  );
}

export default App;
