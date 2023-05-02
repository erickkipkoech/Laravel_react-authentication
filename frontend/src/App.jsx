import { Link, Routes, Route } from "react-router-dom";
import Navbar from "./components/navbar";
import Login from "./components/login";
import Dashboard from "./components/dashboard";
import Register from "./components/register";

function App() {
  return (
    <div>
  
      <Routes>
        <Route path="/" element={<><Navbar /><Dashboard /></>} />
        <Route path="/register" element={<Register/>} />
        <Route path="/login" element={<Login />} />
        <Route path="/logout" element={<Login />} />
      </Routes>
    </div>
  );
}

export default App;
