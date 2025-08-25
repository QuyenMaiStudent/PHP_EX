import { useState } from "react";
import "../../css/casino.css"

const buttons = [
    ["7", "8", "9", "DEL", "AC"],
    ["4", "5", "6", "x", "÷"],
    ["1", "2", "3", "+", "-"],
    ["0", ".", "=", ""],
];

function Casino() {
    const [display, setDisplay] = useState("0");
    const [operator, setOperator] = useState(null);
    const [firstValue, setFirstValue] = useState(null);
    const [waitingForOperand, setWaitingForOperand] = useState(false);
    const [expression, setExpression] = useState("");

    const handleClick = (btn) => {
        if (btn === "") return;
        if (btn === "AC") {
            setDisplay("0");
            setOperator(null);
            setFirstValue(null);
            setWaitingForOperand(false);
            setExpression("");
            return;
        }
        if (btn === "DEL") {
            setDisplay(display.length > 1 ? display.slice(0, -1) : "0");
            if (waitingForOperand) {
                setExpression(expression.slice(0, -1));
            }
            return;
        }
        if (["+", "-", "x", "÷"].includes(btn)) {
            setOperator(btn);
            setFirstValue(parseFloat(display));
            setWaitingForOperand(true);
            setExpression(display + " " + btn);
            return;
        }
        if (btn === "=") {
            if (operator && firstValue !== null) {
                const secondValue = parseFloat(display);
                let result = 0;
                switch (operator) {
                    case "+": result = firstValue + secondValue; break;
                    case "-": result = firstValue - secondValue; break;
                    case "x": result = firstValue * secondValue; break;
                    case "÷": result = secondValue !== 0 ? firstValue / secondValue : "Error"; break;
                    default: return;
                }
                setDisplay(result.toString());
                setOperator(null);
                setFirstValue(null);
                setWaitingForOperand(false);
                setExpression("");
            }
            return;
        }

        if (btn === ".") {
            if (!display.includes(".")) setDisplay(display + ".");
            if (waitingForOperand) setExpression(expression + ".");
            return;
        }

        if (/\d/.test(btn)) {
            if (display === "0" || waitingForOperand) {
                setDisplay(btn);
                setWaitingForOperand(false);
                if (operator && firstValue !== null) {
                    setExpression(expression + " " + btn);
                }
            } else {
                setDisplay(display + btn);
                if (operator && firstValue !== null) {
                    setExpression(expression + btn);
                }
            }
            return;
        }
    };

  return (
    <div className="calculator-container">
        <div className="casino-display" style={{ fontSize: "1.1rem", color: "#bbb", minHeight: "24px" }}>
            {expression}
        </div>
        <div className="casino-display">{display}</div>
        <div className="casino-buttons">
            {buttons.map((row, i) => (
                <div className="casino-row" key={i}>
                    {row.map((btn, j) => {
                        let btnClass = "casino-btn";
                        if (["+", "-", "x", "÷"].includes(btn)) btnClass += " op";
                        if (btn === "DEL") btnClass += " del";
                        if (btn === "AC") btnClass += " ac";
                        if (btn === "=") btnClass += " eq";
                        if (btn === "") btnClass += " empty";
                        return (
                            <button key={j} className={btnClass} onClick={() => handleClick(btn)} disabled={btn === ""}>
                                {btn}
                            </button>
                        );
                    })}
                </div>
            ))}
        </div>
    </div>
  )
}

export default Casino;