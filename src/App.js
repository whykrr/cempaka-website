// import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import LandingPage from './layout/LandingPage';
import { Component } from 'react';

class App extends Component {
  render() {
    return (
      <BrowserRouter>
        <Routes>
          <Route exact path="/" element={<LandingPage />} />
        </Routes>
      </BrowserRouter >
    )
  }
}

export default App;
