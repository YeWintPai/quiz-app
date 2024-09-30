
import './App.css'
import { BrowserRouter, Routes, Route} from 'react-router-dom';
import AboutUs from './components/systems/AboutUs';
import Question from './components/systems/Question';

function App() {
  

  return (
    <>
      <BrowserRouter>
        <Routes>
          <Route path='/about-us' element = {<AboutUs/>}/>
          <Route path='/question' element = {<Question/>}/>
        </Routes>
      </BrowserRouter>
    </>
  )
}

export default App
