import React from "react";
import { FaSearch, FaClipboardList } from "react-icons/fa";

const AdminPrestamosTable = ({
  prestamos,
  onEdit,
  onDelete,
  onCreate,
  searchTerm,
  setSearchTerm,
  currentPage,
  totalPages,
  onPageChange,
}) => {
  return (
    <div className="bg-white p-6 rounded-xl shadow-md w-full max-w-6xl mx-auto mt-6">
      <div className="flex justify-between items-center mb-6">
        <h2 className="text-2xl font-bold text-green-700 flex items-center gap-2">
          <FaClipboardList /> Lista de Préstamos
        </h2>
        <button
          onClick={onCreate}
          className="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition"
        >
          + Nuevo Préstamo
        </button>
      </div>

      <div className="relative max-w-sm mx-auto mb-6">
        <FaSearch className="absolute left-3 top-3 text-gray-400" />
        <input
          type="text"
          value={searchTerm}
          onChange={(e) => setSearchTerm(e.target.value)}
          placeholder="Buscar por aprendiz o producto..."
          className="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-green-600"
        />
      </div>

      <div className="overflow-x-auto">
        <table className="min-w-[800px] w-full text-sm text-left border-separate border-spacing-y-2">
          <thead>
            <tr className="bg-green-600 text-white">
              <th className="px-4 py-3">Aprendiz</th>
              <th className="px-4 py-3">Ficha</th>
              <th className="px-4 py-3">Producto</th>
              <th className="px-4 py-3">Cantidad</th>
              <th className="px-4 py-3">Fecha Préstamo</th>
              <th className="px-4 py-3">Devuelto</th>
              <th className="px-4 py-3">Estado Entrega</th>
              <th className="px-4 py-3">Fecha Devolución</th>
              <th className="px-4 py-3 text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            {prestamos.map((p) => (
              <tr
                key={p._id}
                className="bg-gray-50 hover:bg-green-50 transition"
              >
                <td className="px-4 py-3 font-medium text-gray-900">
                  {p.nombreAprendiz} {p.apellidosAprendiz}
                </td>
                <td className="px-4 py-3 text-gray-700">{p.ficha}</td>
                <td className="px-4 py-3 text-gray-700">
                  {typeof p.producto === "object"
                    ? p.producto.nombre
                    : p.producto}
                </td>
                <td className="px-4 py-3 text-gray-700">{p.cantidad}</td>
                <td className="px-4 py-3 text-gray-700">
                  {new Date(p.fechaPrestamo).toLocaleDateString()}
                </td>
                <td className="px-4 py-3 capitalize text-gray-700">
                  {p.devuelto}
                </td>
                <td className="px-4 py-3 text-gray-700">{p.estadoEntrega}</td>
                <td className="px-4 py-3 text-gray-700">
                  {p.fechaDevolucion
                    ? new Date(p.fechaDevolucion).toLocaleDateString()
                    : "-"}
                </td>
                <td className="px-4 py-3 text-center space-x-2">
                  <button
                    onClick={() => onEdit(p)}
                    className="px-4 py-1 text-sm font-medium text-white bg-yellow-500 rounded hover:bg-yellow-600 transition"
                  >
                    Editar
                  </button>
                  <button
                    onClick={() => onDelete(p._id)}
                    className="px-4 py-1 text-sm font-medium text-white bg-red-600 rounded hover:bg-red-700 transition"
                  >
                    Eliminar
                  </button>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>

      {totalPages > 1 && (
        <div className="mt-6 flex justify-center gap-2">
          {Array.from({ length: totalPages }, (_, i) => (
            <button
              key={i + 1}
              onClick={() => onPageChange(i + 1)}
              className={`px-3 py-1 rounded ${
                currentPage === i + 1
                  ? "bg-green-600 text-white"
                  : "bg-gray-200 text-gray-700 hover:bg-gray-300"
              }`}
            >
              {i + 1}
            </button>
          ))}
        </div>
      )}
    </div>
  );
};

export default AdminPrestamosTable;
