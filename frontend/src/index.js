import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import App from "./App";
import reportWebVitals from "./reportWebVitals";
import { Provider } from "react-redux";
import store from "./redux/store";
import "bootstrap/dist/css/bootstrap.css";
import 'react-toastify/dist/ReactToastify.css';
import "./common/style.css";

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <React.StrictMode>
    <Provider store={store}>
      <App />
    </Provider>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
/*React và ReactDOM: React là thư viện chính để xây dựng giao diện, và ReactDOM được dùng để render ứng dụng React lên DOM trong trình duyệt.
index.css, common/style.css: Các file CSS để thiết lập phong cách chung cho toàn ứng dụng.
App: Thành phần chính (component) của ứng dụng.
reportWebVitals: Hàm đo lường hiệu suất của ứng dụng.
Provider và store: Đến từ Redux. Provider dùng để kết nối Redux store với toàn bộ ứng dụng React, giúp quản lý trạng thái chung. store là nơi lưu trữ trạng thái toàn cục của ứng dụng.
Bootstrap và ReactToastify CSS: CSS từ Bootstrap và React Toastify (thông báo hiển thị dạng toast) để sử dụng trong giao diện./

/*ReactDOM.createRoot tạo một gốc DOM để React có thể render lên. document.getElementById("root") lấy phần tử DOM với id="root", nơi mà toàn bộ ứng dụng React sẽ được render.
StrictMode: Một công cụ kiểm tra giúp phát hiện các vấn đề tiềm ẩn trong ứng dụng React như các API cũ hoặc không an toàn. Nó không ảnh hưởng đến trải nghiệm người dùng trong chế độ production.
Provider: Đặt thành phần Provider bao bọc toàn bộ ứng dụng (<App />) để kết nối ứng dụng với Redux store. Điều này cho phép mọi component con bên trong App có thể truy cập và sử dụng Redux store.
App: Thành phần gốc (root component) của ứng dụng, nơi chứa toàn bộ các phần khác của giao diện và <logic */