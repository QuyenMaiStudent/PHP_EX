import { useState } from "react";
import { Link } from '@inertiajs/react';
import "../../css/calculator.css"

function Calculator() {
    const [a, setA] = useState('');
    const [b, setB] = useState('');
    const [result, setResult] = useState(null);

    const handleCalc = (select) => {
        const numA = parseFloat(a);
        const numB = parseFloat(b);
        let res = null;

        switch (select) {
            case '+': res = numA + numB; break;
            case '-': res = numA - numB; break;
            case '*': res = numA * numB; break;
            case '/': res = numB !== 0 ? numA / numB : 'Error: Không chia được cho 0'; break;
            case 'reset': setA(''); setB(''); setResult(null); break;
            default: return;
        }
        setResult(res);
    }

  return (
    <div className="calculator-container">
        <div style={{ width: "100%", marginBottom: "12px", textAlign: "right" }}>
            <Link href="/casino" style={{ color: "#1976d2", fontWeight: "bold", textDecoration: "none" }}>
                Chuyển sang máy tính xịn hơn
            </Link>
        </div>
        <div className="calculator-inputs">
            <input type="number" value={a} onChange={e => setA(e.target.value)}/>
            <input type="number" value={b} onChange={e => setB(e.target.value)}/>
        </div>
        <div id="options">
            <button onClick={() => handleCalc('+')}>Cộng</button>
            <button onClick={() => handleCalc('-')}>Trừ</button>
            <button onClick={() => handleCalc('*')}>Nhân</button>
            <button onClick={() => handleCalc('/')}>Chia</button>
            <button onClick={() => handleCalc('reset')}>Reset</button>
        </div>
        {result !== null && <div className="result-display">Kết quả: {result}</div>}

        
    </div>
  )
}

export default Calculator