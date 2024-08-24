import logo from './logo.svg';
import './App.css';
import User from './component/User/User';
import Section from './component/Section/Section';
import Description from './component/Description/Description';

function App() {
  const userInfo = {
    Fname: "Alexa Mae",
    Lname: "Ellorza",
    sect: "BSI-3A",
    descr: "I am a responsible and a hardworking student from yanga"
  }
  return (
    <div className="App">
      <User Fname={userInfo.Fname} Lname={userInfo.Lname}/>
      <Section sect={userInfo.sect}/>
      <Description descr={userInfo.descr}/>
    </div>
  );
}

export default App;
