import React, { useEffect, useState } from 'react';
import { XMarkIcon, CheckCircleIcon, ExclamationTriangleIcon, InformationCircleIcon, XCircleIcon } from '@heroicons/react/24/outline';
import { Transition } from '@headlessui/react';

export interface ToastProps {
    id: string;
    title: string;
    message?: string;
    type: 'success' | 'error' | 'warning' | 'info';
    duration?: number;
    onClose?: (id: string) => void;
}

const Toast: React.FC<ToastProps> = ({ 
    id, 
    title, 
    message, 
    type, 
    duration = 5000, 
    onClose 
}) => {
    const [show, setShow] = useState(true);
    const [visible, setVisible] = useState(true);

    useEffect(() => {
        if (duration > 0) {
            const timer = setTimeout(() => {
                setShow(false);
            }, duration);

            return () => clearTimeout(timer);
        }
    }, [duration]);

    const handleClose = () => {
        setShow(false);
        onClose?.(id);
    };

    const getIcon = () => {
        const iconClass = 'w-6 h-6 flex-shrink-0';
        
        switch (type) {
            case 'success':
                return <CheckCircleIcon className={`${iconClass} text-green-600`} />;
            case 'error':
                return <XCircleIcon className={`${iconClass} text-red-600`} />;
            case 'warning':
                return <ExclamationTriangleIcon className={`${iconClass} text-yellow-600`} />;
            case 'info':
                return <InformationCircleIcon className={`${iconClass} text-primary-600`} />;
            default:
                return <InformationCircleIcon className={`${iconClass} text-gray-600`} />;
        }
    };

    const getStyles = () => {
        switch (type) {
            case 'success':
                return 'border-green-200 bg-green-50';
            case 'error':
                return 'border-red-200 bg-red-50';
            case 'warning':
                return 'border-yellow-200 bg-yellow-50';
            case 'info':
                return 'border-primary-200 bg-primary-50';
            default:
                return 'border-gray-200 bg-gray-50';
        }
    };

    return (
        <Transition
            show={visible}
            appear={true}
            enter="transition-all duration-300 ease-out"
            enterFrom="transform translate-x-full opacity-0"
            enterTo="transform translate-x-0 opacity-100"
            leave="transition-all duration-200 ease-in"
            leaveFrom="transform translate-x-0 opacity-100"
            leaveTo="transform translate-x-full opacity-0"
            afterLeave={() => setVisible(false)}
        >
            <div className={`
                max-w-sm w-full border rounded-lg shadow-lg pointer-events-auto
                ${getStyles()}
            `}>
                <div className="p-4">
                    <div className="flex items-start">
                        <div className="flex-shrink-0">
                            {getIcon()}
                        </div>
                        <div className="ml-3 w-0 flex-1">
                            <p className="text-sm font-medium text-gray-900">
                                {title}
                            </p>
                            {message && (
                                <p className="mt-1 text-sm text-gray-600">
                                    {message}
                                </p>
                            )}
                        </div>
                        <div className="ml-4 flex-shrink-0 flex">
                            <button
                                className={`
                                    inline-flex rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2
                                    ${type === 'success' ? 'focus:ring-green-500 focus:ring-offset-green-50' : ''}
                                    ${type === 'error' ? 'focus:ring-red-500 focus:ring-offset-red-50' : ''}
                                    ${type === 'warning' ? 'focus:ring-yellow-500 focus:ring-offset-yellow-50' : ''}
                                    ${type === 'info' ? 'focus:ring-primary-500 focus:ring-offset-primary-50' : ''}
                                `}
                                onClick={handleClose}
                            >
                                <span className="sr-only">Dismiss</span>
                                <XMarkIcon className="w-5 h-5 text-gray-400 hover:text-gray-600" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </Transition>
    );
};

export default Toast;