import { Link, router } from "@inertiajs/react";
import "../../../css/contact.css";

function ContactList({ contacts, success }) {
    const handleDelete = (id) => {
        if (confirm('Bạn có chắc muốn xóa?')) {
            router.delete(`/contacts/${id}`);
        }
    };


  return (
    <div className="contact-container">
        <h2>Danh bạ</h2>
        {success && <div className="contact-success">{success}</div>}
        <Link href="/contacts/create" className="contact-add-btn">Thêm mới</Link>
        <table className="contact-table">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Điện thoại</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                {contacts.map(c => (
                    <tr key={c.id}>
                        <td>{c.name}</td>
                        <td>{c.email}</td>
                        <td>{c.phone}</td>
                        <td>
                            <Link href={`/contacts/${c.id}/edit`} className="contact-edit-btn">Sửa</Link>
                            <button onClick={() => handleDelete(c.id)} className="contact-del-btn">Xóa</button>
                        </td>
                    </tr>
                ))}
            </tbody>
        </table>
    </div>
  );
}

export default ContactList